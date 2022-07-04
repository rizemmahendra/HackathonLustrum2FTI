$(document).ready(function(){
    // ------------------ get data list saham ---------------------------
    let url = 'https://api.polygon.io/v3/reference/tickers?apiKey=0geC7dQY4c574yC2IW2b4qjAeGtzy6YE';

    let arrListStock=[];

    getListStock(url);

    function getListStock(url){
        let hasil = $.ajax({
            method: 'GET',
            url: url,
            dataType: 'json',
            global: false,
            async:false,
            success: function(data){
                return data;
            }
        }).responseJSON;
        arrListStock.push(hasil.results);
        // if(hasil.next_url != ''){
            //     getListStock(hasil.next_url+'&apiKey=0geC7dQY4c574yC2IW2b4qjAeGtzy6YE');
            // }
            // $('#calc-container').append(hasil.meta.Information);
    }
    arrListStock.forEach(lists => {

        lists.forEach(list => {
            $('#pil-saham').append(`<option value='${list.ticker}'>${list.name.substring(0,50)}...</option>`)
        })
    });

    // ----------------- get detail saham -------------------------
    $("#pil-saham").on('change', () => {
        let tickerStock = $("#pil-saham").val();
        let results = $.ajax({
            url: `https://api.polygon.io/v3/reference/tickers/${tickerStock}?apiKey=0geC7dQY4c574yC2IW2b4qjAeGtzy6YE`,
            method: 'GET',
            dataType: 'JSON',
            global: false,
            async:false,
            success: function(data){
                return data;
                
            }
        }).responseJSON.results;
        if(results.hasOwnProperty('branding')){
            $("#stock-image").html(`<img src="${results.branding.logo_url}?apiKey=0geC7dQY4c574yC2IW2b4qjAeGtzy6YE" alt="${results.name}" width=250>`);
        }
        else{
            $("#stock-image").html(`<img src="img/TSaham.png" alt="Logo Saham" width=250>`);
        }
        $('#stock-detail').html(`
            <table>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>${results.name}</td>
                </tr>
                <tr>
                    <th>Kode Saham</th>
                    <td>:</td>
                    <td>${results.ticker}</td>
                </tr>
                <tr>
                    <th>Market Cap</th>
                    <td>:</td>
                    <td>$ ${results.market_cap}</td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td>:</td>
                    <td id="web-saham"></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>:</td>
                    <td>${(results.active===true?'Aktif':'Tidak Aktif')}</td>
                </tr>
            </table>
        `);
        if(results.hasOwnProperty('homepage_url')){
            $("#web-saham").html(`<a href="${results.homepage_url}" style="color:#577186">${results.homepage_url}</a>`);
        }
        else{
            $("#web-saham").html(` `);
        }

        // --------------- get current date
        let fullDate = new Date();
        let twoDigitMonth = fullDate.getMonth()+"";if(twoDigitMonth.length==1)	twoDigitMonth="0" +twoDigitMonth;
        let twoDigitDate = fullDate.getDate()+"";if(twoDigitDate.length==1)	twoDigitDate="0" +twoDigitDate;
        let currentDate = fullDate.getFullYear() + "-" + twoDigitMonth + "-" + twoDigitDate;
        // setInterval(function(){
        let value = $.ajax({
            url: `https://api.polygon.io/v1/open-close/${tickerStock}/2020-10-14?adjusted=true&apiKey=0geC7dQY4c574yC2IW2b4qjAeGtzy6YE`,
            method: 'GET',
            dataType: 'JSON',
            global: false,
            async:false,
            success: function(data){
                // console.log(data);
                return data
            }
        }).responseJSON;
        console.log(value);
        // }, 1000)
        $("#stock-price").html(`
            <table style="width: 100%; text-align: center;">
                <tbody>
                    <tr>
                        <th>Low</th>
                        <th>Open</th>
                        <th>High</th>
                    </tr>
                    <tr>
                        <td id="value-low">$${value.low}</td>
                        <td id="value-open">$${value.open}</td>
                        <td id="value-high">$${value.high}</td>
                    </tr>
                    <tr>
                        <th>Volume</th>
                        <th>Status</th>
                        <th>Close</th>
                    </tr>
                    <tr>
                        <td id="value-volume">$${value.volume}</td>
                        <td id="value-status">${((value.open-value.close)/value.close)*100}%</td>
                        <td id="value-close">$${value.close}</td>
                    </tr>
                </tbody>
            </table>
        `);
        let stat = parseFloat($("#value-status").text().replace('%',''));
        console.log(stat);
        if(stat>0){
            $('#value-status').css('color', 'green');
        }
        else if(stat == 0){
            $('#value-status').css('color', 'grey');
        }
        else{
            $('#value-status').css('color', 'red');
        }
    })
})