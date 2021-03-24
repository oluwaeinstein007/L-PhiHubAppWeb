import React from 'react';
import ReactDOM from 'react-dom';

function About() {
    return ( <
        div className = "container" >
        <
        div className = "row justify-content-center" >
        <
        div className = "col-md-8" >

        <
        div id = "slider1"
        className = "carousel slide mt-5"
        dataRide = "carouel" >

        <
        ol className = "carousel-indicators" >
        <
        li className = "active"
        dataTarget = "#slider1"
        dataSlideTo = "0" > < /li> <
        li dataTarget = "#slider1"
        dataSlideTo = "1" > < /li> <
        li dataTarget = "#slider1"
        dataSlideTo = "2" > < /li> <
        /ol>

        <
        div className = "carousel-inner"
        role = "listbox" >

        <
        div className = "carousel-item active" >
        <
        img className = "d-block img-fluid"
        alt = "first slide"
        src = "/svg/image-20151123-18264-j336wc.jpg" > < /img> <
        div className = "carousel-caption d-none d-md-block" >
        <
        h3 > Just
        for You < /h3> <
        p > We 're here just to solve you problem</p> <
        /div> <
        /div>

        <
        /div>

        <
        /div>



























        <
        /div> <
        /div> <
        /div>


    );
}

export default About;

if (document.getElementById('about')) {
    ReactDOM.render( < About / > , document.getElementById('about'));
}