
const saveProductDetail =  () => {
    let url = $('#save_url').val();    
    var formData = {};
    var CSRF_TOKEN = $('input[name="_token"]').val();    
    var form_value = $('form').serializeArray();

    var image_list = Array();
    var imageFiles = document.getElementById("mobile_images"),
    filesLength = imageFiles.files.length;
    for (var i = 0; i < filesLength; i++) {
      image_list[i] = imageFiles.files[i].name;
    }
    formData['images'] = image_list;
    formData['form_data'] = form_value;
    console.log(formData);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN
        }
    });
    $.ajax({
        url: url,
        type:'POST',
        dataType:'JSON',
        data:formData,
        contentType: false,
        processData: false,
        cache:false,
        success:function(data) {
            alert(data.msg);
           //$("#msg").html(data.msg);
        }
     }); 

}