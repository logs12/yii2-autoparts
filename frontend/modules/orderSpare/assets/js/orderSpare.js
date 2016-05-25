/**
 * Created by vasil on 23.04.2016.
 */
jQuery(document).ready(function(){

    var modalContainer = $('#popap-spare');
    $('.order-spare').on('click', function(e){
        e.preventDefault();
        entity = $(this).attr('entity');
        title = $(this).text();

        /* init popap - add title */
        modalContainer.find('#myModalLabel').html(title);
        modalContainer.modal('show');

        var activeTab = '';
        modalContainer.find('.tab-content .tab-pane').each(function(key, val){
            if ($(val).hasClass('active'))
                activeTab = $(val);
        });

        /* init tabs - add content first tab*/
        switch (activeTab.attr('id')){
            case 'catalog-number':
                getTabsContent(
                    'orderSpare/order-spare/view-catalog-number',
                    activeTab,
                    function(){
                        /* заполняем скрытое поле формы*/
                        modalContainer.find('.tab-content #' + activeTab.attr('id') + ' > form .field-callback-entity > input').val(entity);
                        afterSuccess(
                            'orderSpare/order-spare/catalog-number',
                            '#catalog-number'
                        );
                    });
                break;
            case 'vin':
                getTabsContent(
                    'orderSpare/order-spare/view-vin',
                    activeTab,
                    function(){
                        /* заполняем скрытое поле формы*/
                        modalContainer.find('.tab-content #' + activeTab.attr('id') + ' > form .field-callback-entity > input').val(entity);
                        afterSuccess(
                            'orderSpare/order-spare/vin',
                            '#vin'
                        );
                    });
                break;
        }

        modalContainer.find('#tabOrderSpare a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            console.log('[data-toggle="tab"]');
            switch ($(e.target).attr('href')) {
                case '#catalog-number' :
                    getTabsContent(
                        'orderSpare/order-spare/view-catalog-number',
                        modalContainer.find('.tab-content #catalog-number'),
                        function(){
                            /* заполняем скрытое поле формы*/
                            modalContainer.find('.tab-content ' + $(e.target).attr('href') + ' > form .field-callback-entity > input').val(entity);
                            afterSuccess(
                                'orderSpare/order-spare/catalog-number',
                                '#catalog-number'
                        )}
                    );
                    break;
                case '#vin' :
                    getTabsContent(
                        'orderSpare/order-spare/view-vin',
                        modalContainer.find('.tab-content #vin'),
                        function(){
                            /* заполняем скрытое поле формы*/
                            modalContainer.find('.tab-content ' + $(e.target).attr('href') + ' > form .field-callback-entity > input').val(entity);
                            afterSuccess(
                                'orderSpare/order-spare/vin',
                                '#vin'
                        )}
                    );
                    break;
            }
            $(this).tab('show');
            console.log($(e.target).attr('href'));
        });
    });

    /* удаляем обработчики при закрытии modal*/
    $('#popap-spare').on('hidden.bs.modal',function(){
        modalContainer.find('#tabOrderSpare a[data-toggle="tab"]').off('shown.bs.tab');
    });
});

/**
 * Get content tabs
 * @param url
 * @param el
 * @param onSuccess
 */
function getTabsContent(url, el, onSuccess) {
    $.ajax({
        url: url,
        type: 'POST',
        beforeSend: function(){
            el.html('<img class="loadImg" src="' + loadImgOrderShare + '">');
        },
        success: function (data) {
            if (data) {
                el.html(data);
                onSuccess && onSuccess();
            }
        }
    });
}

/**
 * отправка данных из формы на обработку в контроллер по событию
 * удачной валидации всех полей и до того как форма отправляется на северер
 * @param url
 * @param id
 */
function afterSuccess(url, id){

    $('.modal-body .tab-content ' + id + ' form').on('beforeSubmit', function(event){
        var form = $(this);
        console.log(form.serialize());
        $.ajax({
            url: url,
            type: 'POST',
            async: false,
            data: form.serialize(),
            success: function(data){
                var tabСontent = $('.tab-content .active');
                if (data == 'true') {
                    tabСontent.html("<div class='alert alert-success'>" +
                        "<strong>Спасибо! Ваше сообщение отправлено.</strong>" +
                        "</div>");
                    setTimeout(function() {
                        $("#popap-spare").modal('hide');

                    }, 2000);
                }
                else {
                    $('.tab-content .active').html(data);
                }
            }
        });
        return false;
    });
}