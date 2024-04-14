*
{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family: 'poppins',sans-serif;
}
body
{
  color: #ededed;
  background:#0B0052
}
.header
{
  position: fixed;
  top:0;
  left: 0;
  width: 100%;
  padding: 20px 10%;
  background: #051105;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 100;
}
.navbar a{
  display: inline-block;
  font-size: 25px;
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  margin-left: 35px; 
}
.navbar a:hover{
  color: crimson;
}
.navbar .dropdown {
  position: relative;
}

.navbar .dropdown-toggle {
  cursor: pointer;
}

.navbar .dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #051105;
  border: none;
  padding: 10px 0;
  border-radius: 5px;
  display: none;
}

.navbar .dropdown-menu.show {
  display: block;
}

.navbar .dropdown-menu .dropdown-item {
  display: block;
  width: 100%;
  padding: 10px 20px;
  font-size: 16px;
  color: #fff;
  text-decoration: none;
  transition: background-color 0.3s;
}

.navbar .dropdown-menu .dropdown-item:hover {
  background-color: #0b4034;
}
.home{
  position:relative;
  width: 100%;
  justify-content: space-between;
  height: 100vh;
  background:url(background.png) no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  padding: 70px 10% 0;
}
.home-content{
  max-width: 1000px;
}
.home-content h3{
  font-size: 32px;
  font-weight: 700;
}
.home-content p{
  font-size: 20px;
}
.btn-box{
  display: inline-block;
  padding: 12px 28px;
  background: black;
  border-radius: 40px;
  font-size: 16px;
  color: #ffffff;
  letter-spacing: 1px;
  text-decoration: none;
  font-weight: 600;
}
.about{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  align-items: center;
  gap: 1.5rem;
}
.about-img img{
  padding-bottom: 20%;
  max-width: 630px;
  height: auto;
  width: 100%;
  border-radius: 8px;
}
.about-text h2{
  font-size: 60px;
}
.about-text h2 span{
  color: #7e7e7ef7;
}
.about-text p{
  color: black;
  font-size: 20px;
  line-height: 1.4;
  margin-bottom: 4rem;
}
#services{
  color: #051105;
  font-size: 20px;
  line-height: 1.4;
  margin-bottom: 4rem;
}
.sub-title{
  text-align: center;
  font-size: 60px;
  padding-bottom: 70px;
}
.sub-title span{
  color: #7e7e7ef7;
}
.container{
  padding: 90px;
}
.services-list{
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
  grid-gap: 20px;
  margin-top: 50px;
}
.services-list .card{
  background-color: transparent;
  padding: 40px;
  font-size: 13px;
  font-weight: 13px;
  border-right: 10px;
  border-radius: 20px;
  transition: background 0.5s, transform 0.5s;
  box-shadow: 1px 1px 20px #fffffff7,
              1px 1px 40px #7e7e7ef7
}
.services-list .card-body {
  font-size: 12px;
  margin-bottom: 30px;
}
.services-list div h2{
  font-size: 30px;
  font-weight: 500;
  margin-bottom: 15px;
}
.services-list div a{
  text-decoration: none;
  color: #ffffff;
  font-size: 12px;
  margin-top: 20px;
  display: inline-block;
}
.read{
  display: inline-block;
  padding: 12px 28px;
  background: black;
  border-radius: 40px;
  font-size: 16px;
  color: white;
  letter-spacing: 1px;
  text-decoration: none;
  font-weight: 600;
  box-shadow: 0 0 5px #7e7e7ef7, 0 0 25px #7e7e7ef7;

}
.read:hover{
  box-shadow: 0 0 5px #7e7e7ef7, 0 0 25px #7e7e7ef7,  0 0 50px #7e7e7ef7, 0 0 100px #7e7e7ef7, 0 0 200px #7e7e7ef7;
}
.services-list div:hover{
  transform: translate(-10px);
}
.container {
  max-width: 600px;
  margin: auto;
  text-align: center;
}

.container h3 {
  color: #fff;
  font-size: 48px;
  margin-bottom: 30px;
}

.fcf-label {
  display: block;
  font-weight: bold;
  margin-bottom: 24px;
  color: #fff;
}

.fcf-form-control {
  width: 30%;
  padding: 12px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #afafaff7;
  color: #fff;
}

.fcf-form-control:focus {
  outline: none;
  border-color: #007bff;
}

.fcf-btn {
  width: 8%;
  padding: 12px;
  font-size: 18px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.fcf-btn:hover {
  background-color: #0056b3;
}

#newsletter {
  margin-top: 20px;
}
@media (max-width: 768px) {
  .container {
    padding: 0 20px;
  }

  .fcf-form-control {
    width: 100%;
  }

  .fcf-btn {
    width: 100%;
  }
  .navbar {
     display: flex;
     flex-direction: column;
     align-items: center;
   }
 
  .dropdown {
     width: 100%;
   }
 
  .dropdown-menu {
     position: static;
     transform: none;
     background-color: transparent;
     border: none;
     padding: 0;
   }
 
  .dropdown-menu a {
     padding: 10px;
     text-align: center;
   }
  .services-list {
     grid-template-columns: 1fr;
   }
 }
