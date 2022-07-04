<div id="calc-saham" class="container-fluid hidden">
    <div class="row">
        <h1>KALKULATOR SAHAM</h1>
        <p style="width: 45em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt itaque voluptatem ducimus. Minus recusandae ullam nemo omnis cum, necessitatibus voluptates labore quaerat asperiores, ipsum quidem rem dicta sint repudiandae.</p>
    </div>
    <div class="row" id="calc-container">
        <div class="col">
            <div style="background-color: #0098da69; border-radius: 15px">
                <form action="#" class="d-flex" id="form-calc">
                    <label for="pil-saham">Pilih Saham</label>
                    <select name="pil-saham" id="pil-saham" class="form-select form-saham">
                        <option value="" selected disabled>Pilih Saham</option>
                    </select>
                    <br>
                    <label for="lama-saham">Lama</label>
                    <select name="lama-saham" id="lama-saham" class="form-select form-saham">
                        <option value="" selected disabled>Pilih lama simpan saham</option>
                        <option value="30">Satu Bulan</option>
                        <option value="180">Enam Bulan</option>
                        <option value="360">Satu Tahun</option>
                        <option value="1800">Lima Tahun</option>
                        <option value="3600">Sepuluh Tahun</option>
                    </select>
                    <br>
                    <label for="modal-saham">Modal</label>
                    <input type="number" id="modal-saham" class="form-saham" name="modal-saham" placeholder="Masukkan nilai modal">
                </form>
                <div id="result-calc">
                    
                </div>
            </div>
        </div>
        <div class="col">
            <div id="result-container">
                <div class="row mx-0">
                    <div id="stock-image">
                        <img src="img/TSaham_big.png" width="250" alt="TSaham">
                    </div>
                    <div id="stock-detail">
                        
                    </div>
                    <div id="stock-price">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
