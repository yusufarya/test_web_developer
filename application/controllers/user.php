<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['title'] = "Halo,";
        $data['title_heading'] = "Prepaid Balance";

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['value'] = $this->db->get('value')->result_array();

        $this->load->view('template/header');
        $this->load->view('template/topbar', $data);
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }

    public function topup()
    {
        $data['title'] = "Halo,";
        $data['title_heading'] = "Prepaid Balance";

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['value'] = $this->db->get('value')->result_array();

        $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required|trim');
        $this->form_validation->set_rules('value', 'Value', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('template/topbar', $data);
            $this->load->view('index', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'mobile_number' => $this->input->post('mobile_number'),
                'value' => $this->input->post('value'),
                'date' => time(),
                'no_order' => time()
            ];

			$this->db->insert('prepaid_balance', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('user/product_page');
        }
        
    }

    public function product_page()
    {
        $data['title'] = "Halo,";

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('product', 'Product', 'required|trim');
        $this->form_validation->set_rules('address', 'Shipping Address', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('template/topbar', $data);
            $this->load->view('product_page', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'product' => $this->input->post('product'),
                'address' => $this->input->post('address'),
                'price' => $this->input->post('price'),
                'date' => time(),
                'no_order' => time()
            ];
            $this->db->insert('product', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('user/success');
        }
        
    }

    public function success()
    {
        $data['title'] = "Halo,";
        $data['title_heading'] = "Success!";

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prepaid_balance'] = $this->db->get_where('prepaid_balance')->row_array();
        $data['product'] = $this->db->get_where('product')->row_array();

        $this->load->view('template/header');
        $this->load->view('template/topbar', $data);
        $this->load->view('success', $data);
        $this->load->view('template/footer');
    }
    public function pay_order()
    {
        $data['title'] = "Halo,";
        $data['title_heading'] = "Pay Your Order";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->db->get_where('product')->row_array();

        $this->load->view('template/header');
        $this->load->view('template/topbar', $data);
        $this->load->view('pay_order', $data);
        $this->load->view('template/footer');
    }

    public function history()
    {
        $data['title'] = "Halo,";
        $data['title_heading'] = "Order History";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->db->get('product')->result_array();
        $data['topup'] = $this->db->get('prepaid_balance')->result_array();

        $data['product'] = $this->Product_model->getproduct(20, 1);

        //pagination
        $this->load->library('pagination');

        //config
        $config['base_url'] = "http://localhost/topup_balance/user/history";
        $config['total_rows'] = $this->Product_model->countAll();
        $config['per_page'] = 12;

        // inirialize
        $this->pagination->initialize($config);

        $this->load->view('template/header');
        $this->load->view('template/topbar', $data);
        $this->load->view('history', $data);
        $this->load->view('template/footer');
    }

    public function lunas()
	{
		$email = $this->input->post('email', true);
		$id = $this->uri->segment(3);
		$p = $this->db->query("select*from product where id='$id'")->row();
		// jika id nya sudah ada di DB (tidak boleh lebih dr 1)
		if ($pembayaran = $this->db->query("select*from product where id='$id'") == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-message" role="alert">Error</div>');	
			redirect('user/history');
		} else {
			$data = [
			'id' => $id,
			'no_order' => $p->no_order,

			'status' => 'lunas'
            
			
		];	

		$this->db->insert('lunas', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-message" role="alert"><i class="far fa-lg fa-check-circle"></i>Success!</div>');	
		redirect('user/history');
		}
	}
}