# Install

 composer require "mader12/phone-formatted @dev" 
 
# USE
use phoneformatted\PhoneFormatted;

PhoneFormatted::masked($phonenumber, $mask, $region);
# OR
\phoneformatted\PhoneFormatted::masked($phonenumber, $mask, $region);


# Example

PhoneFormatted::masked('1234567890', "###-###-##-##");
//return +7 123-456-78-90

PhoneFormatted::masked('1234567890', "(###) ###-##-##", '+341');
//return +341 (123) 456-78-90


 