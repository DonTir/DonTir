<html>
<section id="demokrasi">
    <h2>Pemilihan Ketua Kelas (E-Voting)</h2>
    <p>Gunakan hak suaramu dengan bijak!</p>
    
    <form action="pilih.php" method="POST">
        <label>Masukkan NISN / Nama Lengkap:</label><br>
        <input type="text" name="identitas" required placeholder="Contoh: 123456"><br><br>

        <label>Pilih Kandidat:</label><br>
        <div class="kandidat">
            <input type="radio" name="kandidat" value="Kandidat A" id="a" required>
            <label for="a"><strong>Kandidat A:</strong> Mas arif</label><br>
            
            <input type="radio" name="kandidat" value="Kandidat B" id="b">
            <label for="b"><strong>Kandidat B:</strong> Burger bangor</label><br>
        </div>
        <br>
        <button type="submit" name="vote">Kirim Suara</button>
    </form>
</section>
</html>