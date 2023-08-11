const flashData = $('.flash-data').data('flashdata');
if(flashData){
    swal({
        title :'Tambah',
        text:''+flashData,
        type:'success'
    });
}