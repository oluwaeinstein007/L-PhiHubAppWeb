import React from 'react';
import ReactDOM from 'react-dom';

function About() {
    return ( <
        div className = "container" >
        <
        h3 className = "animation text"
        loading = "lazy" > About Us < /h3>

        <
        img alt = ""
        src = "/svg/Rotating_earth_(large).gif" > < /img> <
        br > < /br> <
        p > L 'Phi was founded by Lanre Sanni in July, 2020, as a group of Freelance/Remote software developers working to solve your software problems and bring your imaginatio to life</p> <
        p > We 're based in Lagos, don'
        t believe me ? < a href = "#map" > < button className = "justify-content-right" > Find Us < /button></a > < /p>

        <
        /div>
    );
}

export default About;

if (document.getElementById('about')) {
    ReactDOM.render( < About / > , document.getElementById('about'));
}