<?php
class M_Login extends CI_Model{
	function cek_login_petugas($username, $password){
		$query = $this->db->query("select*from petugas where username = '$username' and password = '$password'");
		return $query;
	}
	function cek_login_siswa($username, $password){
		$query = $this->db->query("select*from siswa where nis = '$username' and password = '$password'");
		return $query;
	}
}