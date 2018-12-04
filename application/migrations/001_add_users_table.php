<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_users_table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'user_id' => array(
                                'type' => 'varbinary(50)',
                                'unsigned' => TRUE,
                        ),
                        'user_name' => array(
                                'type' => 'varchar(30)',
                                'unique' => TRUE,
                        ),
                        'f_name' => array(
                                'type' => 'TEXT',
                        ),
                        'm_name' => array(
                                'type' => 'TEXT',
                        ),
                        'l_name' => array(
                                'type' => 'TEXT',
                        ),
                        'password' => array(
                                'type' => 'varbinary(1024)',
                        ),
                        'email' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'is_email_confirmed' => array(
                                'type' => 'char(1)',
                                'default' => '0',
                        ),                        
                        'phone' => array(
                                'type' => 'varchar(20)',
                                'null' => TRUE,
                        ),
                        'is_phone_confirmed' => array(
                                'type' => 'char(1)',
                                'default' => '0',

                        ),
                        'image' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'is_blocked' => array(
                                'type' => 'char(1)',
                                'default' => '0',
                        ),
                        'created_time' => array(
                                'type' => 'int(10)',
                                'unsigned' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('user_id', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}