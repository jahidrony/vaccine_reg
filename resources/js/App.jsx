import React, {useState} from 'react';
import { createRoot } from 'react-dom/client';
import StudentService from './services/StudentService';


      export default function App(){

    const [Patient, setPatient]= useState();
    const [Msg, setMsg]= useState();

    const handelInputChange = event =>{
        const {name, value} =event.target;
        setPatient({...Patient,[name]:value});
    }
    const savePatient= () =>{
      console.log(Patient)
        StudentService.create(Patient).then(res=>{
         setMsg(res.data);
        }).catch(e=>{
            console.log(e);
        });
    }

          return(

            <>
            <div className="header_section">
            <div className="header_main">
               <div className="mobile_menu">
                  <nav className="navbar navbar-expand-lg navbar-light bg-light">
                     <div className="logo_mobile"><a href="index.html"><img src="images/logo.png"/></a></div>
                     <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                     </button>
                     <div className="collapse navbar-collapse" id="navbarNav">
                        <ul className="navbar-nav">
                           <li className="nav-item">
                              <a className="nav-link" href="index.html">Home</a>
                           </li>
                           <li className="nav-item">
                              <a className="nav-link" href="about.html">About</a>
                           </li>
                           <li className="nav-item">
                              <a className="nav-link" href="services.html">Services</a>
                           </li>
                           <li className="nav-item">
                              <a className="nav-link " href="blog.html">Blog</a>
                           </li>
                           <li className="nav-item">
                              <a className="nav-link " href="contact.html">Contact</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
               <div className="container-fluid">
                  <div className="logo"><a href="index.html"><img src="images/logo.png"/></a></div>
                  <div className="menu_main">
                     <ul>
                        <li className="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            
            <div className="banner_section layout_padding">
               <div id="carouselExampleSlidesOnly" className="carousel slide" data-ride="carousel">
                  <div className="carousel-inner">
                     <div className="carousel-item active">
                        <div className="container">
                           <h3 className="banner_taital">COVID-19 Vaccine Registration</h3>
                           <p className="banner_text">Bangladesh's nationwide vaccination programme began on February 7, 2021. The government has created a web portal, Surokkha, for easy registration for both doses of the vaccine.</p>
                           {Msg}
                           <form action="" method="get">
                              <div className="row">
                                 <div className="col-sm-4">
                                    <label htmlFor="">Name</label>
                                    <input type="text" name="name" id="" className='form-control' onChange={handelInputChange} />
                                 </div>
                                 <div className="col-sm-4">
                                    <label htmlFor="">Age</label>
                                    <input type="text" name="age" id="" className='form-control' onChange={handelInputChange} />
                                 </div>
                                 <div className="col-sm-4">
                                    <label htmlFor="">Gender</label>
                                    <input type="text" name="gender" id="" className='form-control' onChange={handelInputChange} />
                                 </div>
                                 <div className="col-sm-4">
                                    <label htmlFor="">NID</label>
                                    <input type="text" name="nid_number" id="" className='form-control' onChange={handelInputChange} />
                                 </div>
                                 <div className="col-sm-4">
                                    <label htmlFor="">Address</label>
                                    <input type="text" name="address" id="" className='form-control' onChange={handelInputChange} />
                                 </div>
                                 <div className="col-sm-4">
                                    <label htmlFor="">Mobile Number</label>
                                    <input type="text" name="phone_number" id="" className='form-control' onChange={handelInputChange}  />
                                 </div>
                                 <div className="col-sm-4">
                                    <button className='btn btn-primary mt-4' onClick={() => savePatient()} type='button'> Register</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                    
                  </div>
               </div>
            </div>
            </div>
            </>
          );
      }
      
      if(document.getElementById('root')){
          createRoot(document.getElementById('root')).render(<App />)
      }