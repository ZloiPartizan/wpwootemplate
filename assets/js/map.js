;(function() {
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [55.751574, 37.573856],
                zoom: 9
            }, {
                searchControlProvider: 'yandex#search'
            }),
    
            // Создаём макет содержимого.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),
    
//             myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
//                 hintContent: 'Собственный значок метки',
//                 balloonContent: 'Это красивая метка'
//             }, {
//                 // Опции.
//                 // Необходимо указать данный тип макета.
//                 iconLayout: 'default#image',
//                 // Своё изображение иконки метки.
//                 iconImageHref: 'https://www.kt-trapeza.ru/wp-content/uploads/2019/05/place-marker1-1024x1024.png',
//                 // Размеры метки.
//                 iconImageSize: [60, 60],
//                 // Смещение левого верхнего угла иконки относительно
//                 // её "ножки" (точки привязки).
//                 iconImageOffset: [-5, -38]
//             }),
    
            myPlacemarkWithContent = new ymaps.Placemark([55.751574, 37.573856], {
                hintContent: 'Бассейн 1',
                balloonContent: 'Бассейн 1',
//                 iconContent: '12'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#imageWithContent',
                // Своё изображение иконки метки.
                iconImageHref: 'https://www.kt-trapeza.ru/wp-content/uploads/2019/05/place-marker1-1024x1024.png',
                // Размеры метки.
                iconImageSize: [60, 60],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-24, -24],
                // Смещение слоя с содержимым относительно слоя с картинкой.
                iconContentOffset: [15, 15],
                // Макет содержимого.
                iconContentLayout: MyIconContentLayout
            });
    
        myMap.geoObjects
//             .add(myPlacemark)
            .add(myPlacemarkWithContent);
    });
})()