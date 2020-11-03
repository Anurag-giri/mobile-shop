// this function is used to return the next image of array data
const next_image_function = () => {
    if(i > (Images.length)-1 ) {
        i = 0;
    } 
    var image_name_and_path = Images[0]['image_path']+"/"+Images[i]['image_name'];
    $("#product_detail_img_info").attr('src',image_name_and_path);
    i = i+1;
}

//this function is used to return the previous image of array data

const pre_image_function = () => {
    i = i-1;
    if(i < 0 ) {
        i = (Images.length)-1;
    }
    var image_name_and_path = Images[0]['image_path']+"/"+Images[i]['image_name'];
    $("#product_detail_img_info").attr('src',image_name_and_path);
}

