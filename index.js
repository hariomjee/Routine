$(document).ready(function () {

    $.ajax({
        url: "/routine/home.php",
        type: "POST",
        dataType: "json",
        data: { action: "load" },
    
        success: function (result) {
          // alert(JSON.stringify(result));
        // alert(result);
        arr = result;
        let y = ``;
        for (i = 0; i < arr.length; i++) {
          // alert(JSON.stringify(result[i]));
          y = y + `<tr class="text-center">
                 <th class="text-center">${i + 1}</th>
                 <td class="text-center">${arr[i][`subject`]}</td>
                 <td  class="text-center"><i><strong><a href="${arr[i][`link`]}" target="blank">Link</a></strong></i></td>
                 <td  class="text-center">${arr[i][`note`]}</td>
                 <td class="text-center">${arr[i][`date`]}</td>
                 </tr>`;
  
        }
  
        $("#load").html(y);
        },
        error: function () {
          alert("something went wrong to load");
          $("#overlay").fadeOut();
        },
      });
  
  

    $(document).on("click", "#add", function () {
       // alert("clicked");
        var link= document.getElementById("link").value;
        var subject= document.getElementById("subject").value;
        var note= document.getElementById("note").value;
        var date= document.getElementById("date").value;
       // alert(subject);
        // alert(subject);
        // alert(link);
        // alert(date);

        $.ajax({
            url: "/routine/home.php",
            type: "POST",
            dataType: "json",
            data: {link:link, subject:subject,date:date,note:note, action: "Add" },
        
            success: function (result) {
              //alert(JSON.stringify(result));
              alert("Added");
              window.location.reload();
            },
            error: function () {
              alert("something went wrong");
              $("#overlay").fadeOut();
            },
          });
    });

});