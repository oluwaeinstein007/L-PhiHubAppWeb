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
        div className = "card" >
        <
        div className = "card-header"
        dataToggle = "tooltip"
        dataPlacement = "top"
        title = "Welcome yo" > Welcome Component < /div>

        <
        button className = "btn btn-dark"
        dataToggle = "tooltip"
        dataPlacement = "top"
        title = "Hey yo" >
        Click me <
        /button>

        <
        div className = "card-body"
        color = "BLUE" > I 'm an example component!</div> <
        button class = "btn btn-primary" > yes < /button> <
        /div> <
        /div> <
        /div> <
        /div>


    );
}

export default Welcome;

if (document.getElementById('welcome')) {
    ReactDOM.render( < Welcome / > , document.getElementById('welcome'));
}