<?php

class RbacController extends Controller
{
    public function actionSetup()
    {
        // Create roles and permissions
        $auth = Yii::app()->authManager;

        // Create roles
        $admin = $auth->createRole('admin');
        $manager = $auth->createRole('manager');
        $user = $auth->createRole('user');

        // Create permissions (add more as needed)
        $viewPatient = $auth->createOperation('viewPatient', 'View patient details');
        $managePatient = $auth->createOperation('managePatient', 'Manage patient records');
        $manageUsers = $auth->createOperation('manageUsers', 'Manage users');

        // Assign permissions to roles
        $admin->addChild($viewPatient);
        $admin->addChild($managePatient);
        $admin->addChild($manageUsers);

        $manager->addChild($viewPatient);
        $manager->addChild($managePatient);

        $user->addChild($viewPatient);

        // Assign roles to users
        $auth->assign('admin', '1'); // Replace with actual user ID
        $auth->assign('manager', '2'); // Replace with actual user ID
        $auth->assign('user', '3'); // Replace with actual user ID

        echo 'RBAC setup completed.';
    }
}
