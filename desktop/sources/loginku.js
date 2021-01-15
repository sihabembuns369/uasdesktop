function ceklogin(){
    if(sessionStorage.sihab=='' ||sessionStorage.sihab == undefined){
        // sessionStorage.removeItem("sihab");
        window.location.href='login.html';
    }else{
        $('#tempatnama').html('selamat datang :'+ session.sihab);
    }
    
}
function logout(){
    sessionStorage.removeItem("sihab");
        window.location.href='login.html';
    
}