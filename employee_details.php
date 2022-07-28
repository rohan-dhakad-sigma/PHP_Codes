<?php

class Employee
{
    public $first_name, $last_name, $age, $salary, $company_name, $designation;

    function __construct($first_name, $last_name, $company_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->company_name = $company_name;
    }

    function set_detail($age, $salary, $designation)
    {

        $this->salary = $salary;
        $this->designation = $designation;
        $this->age = $age;
    }

    function get_firstname()
    {
        return $this->first_name;
    }

    function get_lastname()
    {
        return $this->last_name;
    }

    function get_age()
    {
        return $this->age;
    }

    function get_salary()
    {
        return $this->salary;
    }

    function get_company_name()
    {
        return $this->company_name;
    }

    function get_designation()
    {
        return $this->designation;
    }

}

$employee_1 = new Employee("Sagar","Sain","Sigma");
$employee_2 = new Employee("Yash","Nagar","RedHat");
$employee_3 = new Employee("Rohan","Dhakad","CodeShip");
$employee_4 = new Employee("Ritesh","Rana","Nagarro");
$employee_5 = new Employee("Shivam","Parihar","Impetus");
$employee_6 = new Employee("Akansha","Wadekar","Adobe");
$employee_7 = new Employee("Ankit","Dubey","TCS");
$employee_8 = new Employee("Ashwin","Bicholiya","Wipro");
$employee_9 = new Employee("Satyendra","Singh","AI.com");
$employee_10 = new Employee("Ritika","Gehlot","Infosys");

//Setting employee age,salary,designation:
$employee_1->set_detail(21,'50000$','SDE-1');
$employee_2->set_detail(22,'55000$','SDE-2');
$employee_3->set_detail(20,'60000$','SDE-3');
$employee_4->set_detail(23,'65000$','SDE-4');
$employee_5->set_detail(21,'70000$','SDE-5');
$employee_6->set_detail(24,'75000$','SDE-6');
$employee_7->set_detail(20,'80000$','SDE-7');
$employee_8->set_detail(22,'85000$','SDE-8');
$employee_9->set_detail(23,'90000$','SDE-9');
$employee_10->set_detail(25,'95000$','SDE-10');

// Table code:
$t = "";
$t .= "<table border='1'>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Company Name</th>
        <th>Designation</th>
        <th>Salary</th>";

// employee_1 data in row_1
$t .= "<tr>";
$t .= "<td>".$employee_1->get_firstname()."</td>";
$t .= "<td>".$employee_1->get_lastname()."</td>";
$t .= "<td>".$employee_1->get_age()."</td>";
$t .= "<td>".$employee_1->get_company_name()."</td>";
$t .= "<td>".$employee_1->get_designation()."</td>";
$t .= "<td>".$employee_1->get_salary()."</td>";
$t .= "</tr>";


// employee_2 data in row_2
$t .= "<tr>";
$t .= "<td>".$employee_2->get_firstname()."</td>";
$t .= "<td>".$employee_2->get_lastname()."</td>";
$t .= "<td>".$employee_2->get_age()."</td>";
$t .= "<td>".$employee_2->get_company_name()."</td>";
$t .= "<td>".$employee_2->get_designation()."</td>";
$t .= "<td>".$employee_2->get_salary()."</td>";
$t .= "</tr>";

// employee_3 data in row_3
$t .= "<tr>";
$t .= "<td>".$employee_3->get_firstname()."</td>";
$t .= "<td>".$employee_3->get_lastname()."</td>";
$t .= "<td>".$employee_3->get_age()."</td>";
$t .= "<td>".$employee_3->get_company_name()."</td>";
$t .= "<td>".$employee_3->get_designation()."</td>";
$t .= "<td>".$employee_3->get_salary()."</td>";
$t .= "</tr>";

// employee_4 data in row_4
$t .= "<tr>";
$t .= "<td>".$employee_4->get_firstname()."</td>";
$t .= "<td>".$employee_4->get_lastname()."</td>";
$t .= "<td>".$employee_4->get_age()."</td>";
$t .= "<td>".$employee_4->get_company_name()."</td>";
$t .= "<td>".$employee_4->get_designation()."</td>";
$t .= "<td>".$employee_4->get_salary()."</td>";
$t .= "</tr>";

// employee_5 data in row_5
$t .= "<tr>";
$t .= "<td>".$employee_5->get_firstname()."</td>";
$t .= "<td>".$employee_5->get_lastname()."</td>";
$t .= "<td>".$employee_5->get_age()."</td>";
$t .= "<td>".$employee_5->get_company_name()."</td>";
$t .= "<td>".$employee_5->get_designation()."</td>";
$t .= "<td>".$employee_5->get_salary()."</td>";
$t .= "</tr>";

// employee_6 data in row_6
$t .= "<tr>";
$t .= "<td>".$employee_6->get_firstname()."</td>";
$t .= "<td>".$employee_6->get_lastname()."</td>";
$t .= "<td>".$employee_6->get_age()."</td>";
$t .= "<td>".$employee_6->get_company_name()."</td>";
$t .= "<td>".$employee_6->get_designation()."</td>";
$t .= "<td>".$employee_6->get_salary()."</td>";
$t .= "</tr>";

// employee_7 data in row_7
$t .= "<tr>";
$t .= "<td>".$employee_7->get_firstname()."</td>";
$t .= "<td>".$employee_7->get_lastname()."</td>";
$t .= "<td>".$employee_7->get_age()."</td>";
$t .= "<td>".$employee_7->get_company_name()."</td>";
$t .= "<td>".$employee_7->get_designation()."</td>";
$t .= "<td>".$employee_7->get_salary()."</td>";
$t .= "</tr>";

// employee_8 data in row_8
$t .= "<tr>";
$t .= "<td>".$employee_8->get_firstname()."</td>";
$t .= "<td>".$employee_8->get_lastname()."</td>";
$t .= "<td>".$employee_8->get_age()."</td>";
$t .= "<td>".$employee_8->get_company_name()."</td>";
$t .= "<td>".$employee_8->get_designation()."</td>";
$t .= "<td>".$employee_8->get_salary()."</td>";
$t .= "</tr>";

// employee_9 data in row_9
$t .= "<tr>";
$t .= "<td>".$employee_9->get_firstname()."</td>";
$t .= "<td>".$employee_9->get_lastname()."</td>";
$t .= "<td>".$employee_9->get_age()."</td>";
$t .= "<td>".$employee_9->get_company_name()."</td>";
$t .= "<td>".$employee_9->get_designation()."</td>";
$t .= "<td>".$employee_9->get_salary()."</td>";
$t .= "</tr>";

// employee_10 data in row_10
$t .= "<tr>";
$t .= "<td>".$employee_10->get_firstname()."</td>";
$t .= "<td>".$employee_10->get_lastname()."</td>";
$t .= "<td>".$employee_10->get_age()."</td>";
$t .= "<td>".$employee_10->get_company_name()."</td>";
$t .= "<td>".$employee_10->get_designation()."</td>";
$t .= "<td>".$employee_10->get_salary()."</td>";
$t .= "</tr>";

// table closing tag
$t .= "</table>";

// Printing table
echo $t;

?>