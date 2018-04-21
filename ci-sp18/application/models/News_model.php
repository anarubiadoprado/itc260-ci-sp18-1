configured your database properly as described here.
<?php
class News_model extends CI_Model {

        public function __construct()
            {
                $this->load->database();
            }//end contructor
    

        public function get_news($slug = FALSE)
            {
                if ($slug === FALSE)
                {
                        $query = $this->db->get('sp18_news');
                        return $query->result_array();
                }

                $query = $this->db->get_where('sp18_news', array('slug' => $slug));
                return $query->row_array();
            }// close get_news()
    
        public function set_news()
            {
                $this->load->helper('url');

                $slug = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                    'title' => $this->input->post('title'),
                    'slug' => $slug,
                    'text' => $this->input->post('text')
                );

                return $this->db->insert('sp18_news', $data);
            }//close set_news()
    
}//end of CI_Model
