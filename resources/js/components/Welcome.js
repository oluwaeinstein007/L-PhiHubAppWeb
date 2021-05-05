import React from 'react';
import ReactDOM from 'react-dom';



function Welcome() {
    return ( <
        div className = "container" >
        <
        div className = "row justify-content-center" >
        <
        div className = "col-md-8" >
        <
        div >
        <
        div className = "row" >
        <
        div className = "contact-col" >
        <
        div >
        <
        a href = "tel:{08057322330}" > < button > Call Us < /button></a >

        <
        a href = "sms:{08057322330}?body={content}" > < button > SMS < /button></a >

        <
        a href = "mailto:{slanre26@gmail.com}?subject={subject}&body={content}" > < button > Email < /button></a >

        <
        a href = "https://twitter.com/OluwaEinstein?s=09" > < button > Twitter < /button></a >

        <
        /div>

        <
        /div>

        <
        div className = "contact-col" >

        <
        div >
        <
        a href = "https://wa.me/message/YJE5JURSSSUPE1" > < button > WhatsApp < /button></a >

        <
        a href = "https://www.linkedin.com/in/sanni-lanre-686125ba" > < button > LinkedIn < /button></a >

        <
        a href = "https://github.com/oluwaeinstein007" > < button > Git Hub < /button></a >

        <
        /div>

        <
        /div>

        <
        /div>

        <
        /div> <
        /div> <
        /div>


        <
        /div>


    );
}

export default Welcome;

if (document.getElementById('welcome')) {
    ReactDOM.render( < Welcome / > , document.getElementById('welcome'));
}