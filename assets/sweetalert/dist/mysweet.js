const flashData = $('.flash-data').data('flashdata');
const flashData2 = $('.flash-data2').data('flashdata');
if(flashData){
    swal({
        title :'Info Login',
        text:''+flashData,
        type:'warning'
    });
}else if(flashData2){
    swal({
        title :'Info Register',
        text:''+flashData2,
        type:'success'
    });
}