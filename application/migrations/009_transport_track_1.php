<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Transport_track_1 extends CI_Migration {
    public function up() {
        $this->dbforge->drop_table('os_transport_track');
        $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY");
        $this->dbforge->add_field("transport_id int(11) unsigned NOT NULL");
        $this->dbforge->add_field("date date NOT NULL");
        $this->dbforge->add_field("in_km float unsigned NOT NULL");
        $this->dbforge->add_field("out_km float unsigned NOT NULL DEFAULT '0'");
        $this->dbforge->add_field("in_time time NOT NULL");
        $this->dbforge->add_field("out_time time NOT NULL DEFAULT '00:00:00'");
        $this->dbforge->add_field("final_km float unsigned NOT NULL DEFAULT '0'");
        $this->dbforge->add_field("status tinyint(1) unsigned NOT NULL DEFAULT '1'");
        $this->dbforge->add_field("added_by int(11) NOT NULL");
        $this->dbforge->add_field("added_on datetime NOT NULL");
        $this->dbforge->add_field("updated_by int(11) NOT NULL");
        $this->dbforge->add_field("updated_on timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('os_transport_track');
    }

    public function down() {
        $this->dbforge->drop_table('os_transport_track');
    }
}
?>