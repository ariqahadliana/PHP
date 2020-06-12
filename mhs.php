 <html>
 <body> 
<form action="output2.php" method="POST"> 
 	NIM : <INPUT TYPE=TEXT NAME="nim"> <BR> <BR> 
 	Nama : <INPUT TYPE=TEXT NAME="nama"> <BR> <BR> 
 	Jenis Kelamin : <BR> 
 	<INPUT TYPE=RADIO NAME="kelamin" VALUE="L"> Laki-laki <BR>
 	<INPUT TYPE=RADIO NAME="kelamin" VALUE="P"> Perempuan <BR> 
	Alamat : <BR> 
	<TEXTAREA NAME="ALAMAT" ROWS=2 COLS=50> </TEXTAREA> <BR>
	Program Studi : 
	<SELECT NAME="prodi" > 
		<OPTION VALUE="FIS">FISIKA 
			<OPTION VALUE="BIO">BIOLOGI 
				<OPTION VALUE="MAT">MATEMATIKA 
					<OPTION VALUE="SI">SISTEM INFORMASI 
					</SELECT> 
					<BR> Bahasa Pemrograman yang dikuasai : <BR>
					 <INPUT TYPE=CHECKBOX NAME="cek[]" VALUE="PASCAL/DELPHI"> PASCAL/DELPHI <BR> 
					 <INPUT TYPE=CHECKBOX NAME="cek[]" VALUE="C/C++"> C/C++" <BR> 
					 <INPUT TYPE=CHECKBOX NAME="cek[]" VALUE="Visual Basic"> Visual Basic <BR> 

					 <INPUT TYPE=SUBMIT VALUE="Kirim!"><BR> 
 
</FORM> 
 
</body> 
 
</html