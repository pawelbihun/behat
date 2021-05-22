Feature: Fill in data in create a business account form and submit
    In order to send the create an account form 
    As a website user 
    I want to be able to open contact form and fill in and submit data 
        Scenario: Open customer create a business account form page and send the form 
            Given I am on "new-account-form" 
        When I fill "e-mail" with "ttestowy@op.pl" 
        And I fill "login" with "ttestowy" 
        And I fill "password" with "Testowe123" 
        And I fill "phone_number" with "123456789"
        And I select "country_of_registration" with "Polska" 
        And I fill "tax_id_number" with "9320627449"
        And I select "company_type" with "spółka cywilna" 
        And I fill "registered_company_name" with "Testowa Firma"
        And I fill "address" with "Testowa 1"
        And I fill "postal_code" with "00-000"
        And I fill "city" with "Warszawa"
        And I fill "province" with "mazowieckie"
        And I select "province" with "mazowieckie"
        And I check "Regulamin_Allegro" checkbox
        And pressing "ZAŁÓŻ KONTO" button 
        Then I should see text matching "Wybierz wszystkie kwadraty z"