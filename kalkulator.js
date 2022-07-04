function kal(waktu=0, modal=0, status=0){
    console.log(waktu);
    console.log(modal);
    console.log(status);
    let total = (parseFloat(status/100)*parseFloat(waktu)*parseFloat(modal))+ parseFloat(modal);
    console.log(total);
    if(total>=0){
        $("#result-calc").html(`
        <h6>Total</h6>
        <span>$${total}</span>`)
    }
    else{
        $("#result-calc").html(`
        <h6>Total</h6>
        <span>$0</span>`)
    }
}
$("#modal-saham").on('keyup', function(){
    let waktu = parseFloat($("#lama-saham").val());
    let modal = parseFloat($("#modal-saham").val());
    let status = $("#value-status").text();
    status = parseFloat(status.replace('%',''));
    kal(waktu, modal, status);
})
$("#lama-saham").on('change', function(){
    let waktu = parseFloat($("#lama-saham").val());
    let modal = parseFloat($("#modal-saham").val());
    let status = $("#value-status").text();
    status = parseFloat(status.replace('%',''));
    kal(waktu, modal, status);
})