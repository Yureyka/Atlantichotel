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
                    url: "/get-feedbacks",
                });
            },
            deleteItem: function (item) {
                return $.ajax({
                    type: "DELETE",
                    url: "/delete-feedbacks/" + item.id,
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
                name: "name",
                title: "Имя",
                type: "text",
                width: 160,
                validate: "required",
            },
            {
                name: "email",
                title: "Email",
                type: "text",
                width: 100,
                validate: "required",
            },
            {
                name: "message",
                title: "Сообщение",
                type: "textarea",
                width: 180,
                validate: "required",
            },
            {
                name: "created_at",
                title: "Дата создания",
                type: "text",
                width: 110,
                validate: "required",
            },
            
            { type: "control" },
        ],
    });
});
