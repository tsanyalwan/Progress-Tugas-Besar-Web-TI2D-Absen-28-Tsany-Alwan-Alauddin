<?php
    $conn=mysqli_connect("localhost","root","","28_tsanyalwan");
    //Cek koneksi
    if(!$conn)
    {
        die('Koneksi Error : '.mysqli_connect_errno()
        .' - '.mysqli_connect_error());
    }
    //Ambil Data
    $result=mysqli_query($conn,"SELECT * FROM Registrasi");
    
    //function query
    function query($query_kedua)
    {
        global $conn;
        $result = mysqli_query($conn,$query_kedua);
        $rows =[];
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[]=$row;
        }
        return $rows;
    }
    function registrasi($data)
    {
        global $conn;

        $namaDepan = strtolower(stripcslashes($data['namaDepan']));
        $namaBelakang = strtolower(stripcslashes($data['namaBelakang']));
        $agama = strtolower(stripcslashes($data['agama']));
        $tglLahir = strtolower(stripcslashes($data['tglLahir']));
        $kebangsaan = strtolower(stripcslashes($data['kebangsaan']));
        $identitas = strtolower(stripcslashes($data['identitas']));
        $noPaspor = strtolower(stripcslashes($data['noPaspor']));
        $negaraPaspor = strtolower(stripcslashes($data['negaraPaspor']));
        $tglKadaluwarsa = strtolower(stripcslashes($data['tglKadaluwarsa']));
        $email = strtolower(stripcslashes($data['email']));
        $noHp = strtolower(stripcslashes($data['noHp']));
        $alamat = strtolower(stripcslashes($data['alamat']));
        $negara = strtolower(stripcslashes($data['negara']));
        $provinsi = strtolower(stripcslashes($data['provinsi']));
        $kota = strtolower(stripcslashes($data['kota']));
        $kodePos = strtolower(stripcslashes($data['kodePos']));
        $username = strtolower(stripcslashes($data['username']));
        $password1=mysqli_real_escape_string($conn,$data['password1']);
        $password2=mysqli_real_escape_string($conn,$data['password2']);
        
        $result=mysqli_query($conn,"SELECT username FROM Registrasi WHERE username='$username'");

        if(mysqli_fetch_assoc($result))
        {
            echo"
                <script>
                    alert('username sudah ada');
                </script>
            ";
            return false;
        }
        if($password1!==$password2)
        {
            echo"
            <script>
                    alert('password tidak sama');
            </script>
            ";
            return false;
        }

        // $password=password_hash($password,PASSWORD_DEFAULT);
        //vardump($password);

        mysqli_query($conn,"INSERT INTO Registrasi VALUES('$namaDepan','$namaBelakang','$agama','$tglLahir','$kebangsaan','$identitas','$noPaspor',
        '$negaraPaspor','$tglKadaluwarsa','$email','$noHp','$alamat','$negara','$provinsi','$kota','$kodePos','$username','$password1','$password2')");
        return mysqli_affected_rows($conn);
    }
