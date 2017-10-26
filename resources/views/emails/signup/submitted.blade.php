
 @component('mail::message')
 # New Signup
 
 A new user has signed up for your service
 
 # Signup Details
 @component('mail::table')
 | Field         | Value         |
 | ------------- |:-------------:|
 | First Name    | {{$firstName}} |
 | Last Name     | {{$lastName}} |
 | Email         | {{$email}} |
 | Phone         | {{$phone}} |
 | Address       | {{$address}} |
 | City          | {{$city}} |
 | State         | {{$state}} |
 | Zip           | {{$zip}} |
 | Theme         | {{$theme}} |
 | Domain        | {{$domain}} |
 | Hosting       | {{$hosting}} |
 | Agent         | {{$agent}} |
 @endcomponent
 
 Thanks,<br>
 {{ config('app.name') }}
 @endcomponent