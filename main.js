const warningOk = document.getElementById('warning-ok');
const warningSiram = document.getElementById('warning-siram');
const warningPupuk = document.getElementById('warning-pupuk');
const soilMoisture = document.getElementById('soilMoisture');
const soilPH = document.getElementById('soilPH')
const valueBuah = document.getElementById('valueBuah');

soilMoisture.textContent = '--';
soilPH.textContent = '--';
valueBuah.textContent = '--Pilihan Buah--';

function peringatan(){
    function hilang(){
        warningOk.style.opacity = '1';
    }
    
    setTimeout(() => {
        warningOk.style.opacity = '0';
    }, 2500);

    hilang();
}

function siram(){
    function hilang(){
        warningSiram.style.opacity = '1';
    }
    
    setTimeout(() => {
        warningSiram.style.opacity = '0';
    }, 2500);

    hilang();
}

function pupuk(){
    function hilang(){
        warningPupuk.style.opacity = '1';
    }
    
    setTimeout(() => {
        warningPupuk.style.opacity = '0';
    }, 2500);

    hilang();
}