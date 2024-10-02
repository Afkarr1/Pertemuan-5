<!DOCTYPE html>
<html lang="en">
<head>
    <p>
    <h2><a href="Home.html">Home</a>  || <a href="About.html">About</a> || <a href="Contact.html">Contact</a></h2> 
    </p>
    <form action="login.php" method="POST">
            <label>Nama:</label>
            <input type="text" name="tuliskan nama" placeholder="Nama kalian" /><br>
        
        <br>
            <label>Email:</label>
            <input type="password" name="Email" placeholder="Masukkan email" /><br>
        
        <br>
            <label>Hobby :</label> <br>
            <input type="checkbox" name="Membaca" value="remember" /> Membaca <br>
            <input type="checkbox" name="Melukis" value="remember" /> Melukis <br>
            <input type="checkbox" name="Olahraga" value="remember" /> Olahraga <br>
        
        <br>
            <label>Jenis Kelamin :</label> <br>
            <input type="radio" name="Laki-Laki" value="remember" /> Laki-Laki <br>
            <input type="radio" name="Perempuan" value="remember" /> Perempuan <br>

        <br>
            <label for="birthday">Tanggal Lahir :</label>
            <input type="date" id="birthday" name="birthday">
            <input type="submit">
         </form>
        
        <br>
            <input type="submit" name="submit" value="Konfirmasi" />
        
        
    </form>
</body>
