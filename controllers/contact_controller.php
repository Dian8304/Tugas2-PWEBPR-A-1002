<?php
include_once 'models/contact.php';

class ContactController
{
    static function createContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::createContact([
                'no_id' => $post['no_id'],
                'owner' => $post['owner'],
                'no_hp' => $post['no_hp'],
                'email' => $post['email'],
                'id_user' => $_SESSION['nama_user']['id_user']
            ]);

            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function updateContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::updateContact([
                'no_id' => $post['no_id'],
                'owner' => $post['owner'],
                'no_hp' => $post['no_hp'],
                'email' => $post['email'],
                'id_user' => $_SESSION['nama_user']['id_user']
            ]);
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function deleteContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::deleteContact($_POST['no_id']);
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }
}