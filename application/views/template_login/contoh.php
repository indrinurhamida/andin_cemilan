if(condition){

			// jika yang login adalah admin maka menggunakan navbar_admin
			$this->load->view('template_login/navbar_admin');

		} elseif (condition) {

			// jika yang login adalah pegawai maka menggunakan navbar_pegawai
			$this->load->view('template_login/navbar_pegawai');

		} else {
			
			// jika yang login adalah gudang maka menggunakan navbar_gudang
			$this->load->view('template_login/navbar_gudang');
		}