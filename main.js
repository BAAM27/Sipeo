function fetchData() {
    $.ajax({
        url: 'fetchData.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#soilMoisture').empty();
            $('#soilPH').empty();
            $('#valueBuah').empty();
            $('#durasiSiram').empty();
            $.each(data, function(index, item) {
                $('#soilMoisture').append(item.kelembaban + '%');
                $('#soilPH').append(item.ph);
                $('#valueBuah').append(item.buah);
                $('#tampilsiram').append(item.durasiSiram);
            });
        }
    });
}
setInterval(fetchData, 1500);
$(document).ready(function() {
    fetchData();
});



$(document).ready(function() {
    $('#btnok').click(function() {
        var durasiSiram = $('#durasiSiram').val();
        var durasiPupuk = $('#durasiPupuk').val();
        var buah = $('#buah').val();
        $.ajax({
            type: 'POST',
            url: 'proses.php',
            data: { durasiSiram: durasiSiram, durasiPupuk: durasiPupuk, buah: buah },
            success: function(response) {
                console.log("masuk");
                console.log(response); // jika Anda ingin melihat respons dari server
            },
            error: function() {
                console.log("tidak masuk");
            }
        });
    });

    $('#btnWater').click(function() {
        var siram = 2;
        $.ajax({
            type: 'POST',
            url: 'proses.php',
            data: { siram: siram },
            success: function(response) {
                console.log("masuk");
                console.log(response); // jika Anda ingin melihat respons dari server
            },
            error: function() {
                console.log("tidak masuk");
            }
        });
    });

    $('#btnFertilize').click(function() {
        var pupuk = 2;
        $.ajax({
            type: 'POST',
            url: 'proses.php',
            data: { pupuk: pupuk },
            success: function(response) {
                console.log("masuk");
                console.log(response); // jika Anda ingin melihat respons dari server
            },
            error: function() {
                console.log("tidak masuk");
            }
        });
    });
});