        <?php
        if (!defined('BASEPATH')) exit('No direct script access allowed');
        if (!function_exists('element')) {


            // ! INFO : Silahkan masukan Custome fungction disini ! // 
            // untuk membantu mempermudah scripting pada modular  
            // Daftar Isi : . . . . . . . . . . . . . . . . . . . 
            // 1. Load Template [1]
            // 2. Rules Form Validation [2]
            // 3. Message Alert template [3]
            // 4. Authentikasi user blocked [4]


            //=====>> Load Template [1] <<=====//

            function load_template($template, $data = null)
            {
                $ci = get_instance();
                $data['load_content'] = $ci->load->view($template, $data, true);
                $ci->load->view('v_header');
                $ci->load->view('v_navbar');
                $ci->load->view('v_page_header', $data);
                $ci->load->view('v_content', $data);
                $ci->load->view('v_footer');
            }

            function load_auth($template, $data = "")
            {
                $ci = get_instance();
                $data['load_content'] = $ci->load->view($template, $data, true);
                $ci->load->view('auth.php', $data);
            }

            //=====>> End Load Template [1] <<=====//




            //=====>> Rules Form Validation [2] <<=====//

            function reg_rules()
            {
                return [
                    [
                        'field' => 'name',
                        'label' => 'Nama',
                        'rules'  => 'trim|required',
                        'errors' => array(
                            'required' => '%s tidak boleh kosong'
                        )
                    ],
                    [
                        'field' => 'email',
                        'label' => 'Email',
                        'rules'  => 'required|trim|valid_email',
                        'errors' => array(
                            'required' => '%s tidak boleh kosong',
                            'valid_email' => '%s tidak boleh kosong'
                        )
                    ],
                    [
                        'field' => 'password1',
                        'label' => 'Password',
                        'rules'  => 'required|min_length[6]',
                        'errors' => array(
                            'required' => '%s tidak boleh kosong',
                            'min_length' => '%s minimal 6 karakter'

                        )
                    ],
                    [
                        'field' => 'password2',
                        'label' => 'Confrim',
                        'rules'  => 'required|matches[password1]|min_length[6]',
                        'errors' => array(
                            'required' => '%s harus diisi',
                            'matches' => '%s tidak sama',
                            'min_length' => '%s minimal 6 karakter'
                        )
                    ]

                ];
            }


            function log_rules()
            {
                return [
                    [
                        'field' => 'email',
                        'label' => 'Email',
                        'rules'  => 'trim|required|valid_email',
                        'errors' => array(
                            'required' => '(* Field %s tidak boleh kosong !',
                            'valid_email' => 'Email tidak valid contoh : example@dwg.co.id'
                        )
                    ],
                    [
                        'field' => 'password',
                        'label' => 'Password',
                        'rules'  => 'required|min_length[3]',
                        'errors' => array(
                            'required' => '(* Field %s tidak boleh kosong !',
                            'min_length' => '%s minimal 3 karakter'
                        )
                    ]
                ];
            }
            //=====>> End Rules Form Validation [2] <<=====//



            //=====>> Message Alert template [3] <<=====//

            function danger_message($mesaage)
            {
                $ci = get_instance();

                $ci->session->set_flashdata(
                    'message',
                    '
                    <div class="alert bg-danger text-white alert-styled-left alert-arrow-left alert-dismissible mx-auto">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <span class="font-weight-semibold">' . $mesaage . '</div>'

                );
            }


            function success_message($mesaage)
            {
                $ci = get_instance();

                $ci->session->set_flashdata(
                    'message',
                    '
                <div class="alert bg-success text-white alert-styled-left alert-arrow-left alert-dismissible mx-auto">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                <span class="font-weight-semibold">' . $mesaage . '</div>'

                );
            }

            //=====>> End Message Alert template [3] <<=====//


            //=====>> Authentikasi user blocked [4] <<=====//

            function blocked()
            {
                $ci = get_instance();
                if (!$ci->session->userdata('email')) {
                    redirect('auth');
                } else {
                    $role_id = $ci->session->userdata('role_id');
                    $menu = $ci->uri->segment(1);

                    $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
                    $menu_id = $queryMenu['id'];

                    $userAccess = $ci->db->get_where('user_access_menu', [
                        'role_id' => $role_id,
                        'menu_id' => $menu_id
                    ]);

                    if ($userAccess->num_rows() < 1) {
                        redirect('auth/blocked');
                    }
                }
            }

            //=====>> End Authentikasi user blocked [4] <<=====//

            // function check_access($role_id, $menu_id)
            // {
            //     $ci = get_instance();

            //     $ci->db->where('role_id', $role_id);
            //     $ci->db->where('menu_id', $menu_id);
            //     $result = $ci->db->get('user_access_menu');

            //     if ($result->num_rows() > 0) {
            //         return "checked='checked'";
            //     }
            // }
        }
