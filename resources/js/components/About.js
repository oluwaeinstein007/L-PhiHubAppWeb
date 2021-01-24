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
        div className = "card border-dark" >
        <
        div className = "card-header bg-dark text-white " > About Component < /div>

        <
        div className = "card-body"
        color = "BLUE" > I 'm an about component!

        <
        /div>

        <
        /div> <
        /div> <
        /div> <
        /div>


    );
}

export default About;

if (document.getElementById('about')) {
    ReactDOM.render( < About / > , document.getElementById('about'));
}