$(function () {
    $("#jsGrid").jsGrid({
        height: "90%",
        width: "100%",
        filtering: true,
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 12,
        pageButtonCount: 5,
        deleteConfirm: "Вы действительно хотите удалить нигу?",
        pagerFormat:
            "Страница: {first} {prev} {pages} {next} {last}    {pageIndex} из {pageCount}",
        pagePrevText: "Предыдущая",
        pageNextText: "Следующая",
        pageFirstText: "Первая",
        pageLastText: "Последняя",
        controller: {
            loadData: function (filter) {
                return $.ajax({
                    type: "GET",
                    url: "/get-reservations",
                });
            },
            // insertItem: function (item) {
            //     return $.ajax({
            //         type: "POST",
            //         url: "/pages/admin_books/",
            //         data: item,
            //     });
            // },
            // updateItem: function (item) {
            //     return $.ajax({
            //         type: "PUT",
            //         url: "/pages/admin_books/",
            //         data: item,
            //     });
            // },
            deleteItem: function (item) {
                return $.ajax({
                    type: "DELETE",
                    url: "/delete-reservations/" + item.id,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                });
            },
        },
        fields: [
            {
                name: "id",
                title: "ID",
                type: "number",
                width: 26,
                editing: false,
            },
            {
                name: "clients.middlename",
                title: "Фамилия",
                type: "text",
                width: 80,
                validate: "required",
            },
            {
                name: "clients.firstname",
                title: "Имя",
                type: "text",
                width: 80,
                validate: "required",
            },
            {
                name: "clients.lastname",
                title: "Отчество",
                type: "text",
                width: 80,
                validate: "required",
            },
            {
                name: "persons_number",
                title: "Персон",
                type: "number",
                width: 50,
                validate: "required",
            },
            {
                name: "arrival_date",
                title: "Дата заселения",
                type: "text",
                width: 80,
                validate: "required",
            },
            {
                name: "departure_date",
                title: "Дата выезда",
                type: "text",
                width: 80,
                validate: "required",
            },
            {
                name: "transfer",
                title: "Трансфер",
                type: "checkbox",
                width: 60,
            },
            {
                name: "comment",
                title: "Комментарий",
                type: "textarea",
                width: 95,
            },
            {
                name: "price",
                title: "К оплате",
                type: "number",
                width: 60,
                validate: "required",
            },
            {
                name: "isAccepted",
                title: "Принято",
                type: "checkbox",
                width: 50,
            },
            { type: "control" },
        ],
    });
});
