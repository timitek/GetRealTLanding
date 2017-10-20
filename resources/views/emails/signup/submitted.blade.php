
 @component('mail::message')
 # New Signup
 
 A new user has signed up for your service
 
 @component('mail::table')
 | Field         | Value         |
 | ------------- |:-------------:|
 | Fisrt Name    | {{$firstName}} |
 | Last Name     | {{$lastName}} |
 | Email         | {{$email}} |
 | Phone         | {{$phone}} |
 | Address       | {{$address}} |
 | City          | {{$city}} |
 | State         | {{$state}} |
 | Zip           | {{$zip}} |
 | Theme         | {{$theme}} |
 @endcomponent
 
 Thanks,<br>
 {{ config('app.name') }}
 @endcomponent