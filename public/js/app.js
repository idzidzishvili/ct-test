$(function () {
   let from, to;
   $("#tblLocations").sortable({
      items: 'tbody tr', //'tr:not(tr:first-child)',
      cursor: 'pointer',
      axis: 'y',
      dropOnEmpty: false,
      start: function (e, ui) {
         ui.item.addClass("selected");
         from = ui.item.find('td.index').text();
      },
      stop: function (e, ui) {
         ui.item.removeClass("selected");
         $(this).find("tr").each(function (index) {
            if (index > 0) {
               if($(this).find("td").eq(0).html() == from)
                  to = index;
               // $(this).find("td").eq(2).html(index);
            }
         });
         console.log(from, to)
         $.ajax({
            type: "POST",
            url: 'test',
            data: table.serialize(), // serializes the form's elements.
            success: function(data)
            {
              alert(data); // show response from the php script.
            }
        });
      }
   });
});