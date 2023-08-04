# http-website
A http:// website for demonstration purposes how to hack it
# Pay attention!
The Github website may not run correctly!<br>
Please clone them and then run them on yours! <br>
You also need to verify that your URLs are all correct. Go through each file and see if it's the correct URL!<br>
# Nothing works?
If nothing works, please write to me or leave a message under "Issues"!

---
If you like this article, I would appreciate a comment & like!
**Thanks!**

---

## 1. What you need
- `http` website with username/password form (no `https`!)
- Wireshark
- Internet connection

### 1.1 Choose http website
Which unencrypted website should I use? Is that unsafe then? Should I look for one online?
**NO!**
I will soon publish my own http website on Github so you can try it out! You can of course also find them here!

### Install Wireshark on your first device
To be able to read the access data yourself, you need a program called "Wireshark".
Have you ever heard of this?
No? / Yes? Feel free to write it in the comments!
We need this. You can easily install this on your device using the link below!
https://www.wireshark.org/download.html
You'll have to tap "Next" quite a few times, but you can leave all the settings as they are.
Also note that other apps will also be installed!
When you start the app it should look like this:

![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/832oo0r0jkxjzygpxcr2.png)
### Using XAMPPon your second device
For Windows you can use the app XAMPP for a local web server:

![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/nbqt97eqsy7pjv8xqwxn.png)
The Github web server files should then be in this folder: `C:\xampp\htdocs`.

## Run website
Now when you are done with the installation, you need to go to this page on your second device: http://localhost/http-website-main/index.html
It should look like this:

![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/7s97rkkqzshnn3vou53r.png)
**✅ Well done!**
- Open Wireshark and choose your main network with a double click:

![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/rtwhdqknte47b5ldw9mq.png)
- Search for `http` and tip `enter`
This is the filter that only allows http requests

![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/qvqwn4jv03n95944d9pu.png)
- Tap "Login" in your website
  
![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/iiib7h4kjde0hp9d8m4l.png)
- You should be logged in

![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/m1vymqmttqsp15euasyz.png)
- Anywhere, there should be something like this with `x-www-form-urlencoded`
  
![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/m66yqjsppdbs145aajrz.png)
- Tap on this
- Scroll down and expand the last one (HTML Form URL encoded):

![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/46yk3bcw68pu1q6c6smr.png)

---
Great, you did it!
Note that this is to help you understand how hackers work. This should not be a suggestion to actively use this for hacking!

---
Thanks for your attention, schBenedikt
