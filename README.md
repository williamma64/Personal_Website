# Personal_Website

Hello everyone! This is my ongoing project of my personal website. After I read the HTML & CSS book, I
started reading about bootstrap and other html, css, and js libraries. This is my attempt at incorporating them
into my personal website.

Resources used:
[bootstrap 4.1.1](https://getbootstrap.com/)
I used bootstrap for their responsive sizing and spacing modules, and their navbar template.

[fontawesome 5](https://fontawesome.com/)
I used fontawesome for their social media font icons.

[mdbootstrap](https://mdbootstrap.com/)
I used mdbootstrap for animations and other design nuances.

My website is currently running using Apache2 on a Google Compute Instance.

My current issue is that my contact page isn't necessarily what I would like it to be. I wanted a form
that would be able to take in info, validate it, and send an email to myself. I tried to use php to
send myself an email, but it wouldn't work since Google Compute Instances have their common email
outbound ports blocked. Then, I tried to use the SendGrid service to send the email. It worked when I
executed the program, but when Apache2 executes it, it returns a 502 Bad Gateway Error.

So, my next step and attempt to fix my contact page is to use Django as a backend so it won't be executed
by Apache2. I am not entirely sure this is the problem, but I will attempt to see if it is.
