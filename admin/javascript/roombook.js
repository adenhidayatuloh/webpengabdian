var detailpanel = document.getElementById("guestdetailpanel");

adduseropen = () => {
    detailpanel.style.display = "flex";
}
adduserclose = () => {
    detailpanel.style.display = "none";
}

document.getElementById('cout').addEventListener('change', function () {
    const checkinDate = new Date(document.getElementById('cin').value);
    const checkoutDate = new Date(document.getElementById('cout').value);
    const timeDiff = checkoutDate - checkinDate;
    
    // Menghitung jumlah hari
    const days = timeDiff / (1000 * 3600 * 24);
    
    // Mengisi nilai nodays ke input hidden
    document.getElementById('nodays').value = days;
});


//search bar logic using js
const searchFun = () =>{
    let filter = document.getElementById('search_bar').value.toUpperCase();

    let myTable = document.getElementById("table-data");

    let tr = myTable.getElementsByTagName('tr');

    for(var i = 0; i< tr.length;i++){
        let td = tr[i].getElementsByTagName('td')[1];

        if(td){
            let textvalue = td.textContent || td.innerHTML;

            if(textvalue.toUpperCase().indexOf(filter) > -1){
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        }
    }

}
