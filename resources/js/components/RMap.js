import React from 'react';
import ReactDOM from 'react-dom';
import { withScriptjs, withGoogleMap, GoogleMap, Marker } from "react-google-maps"

function Map() {
    return ( <
        div >
        <
        h1 > Map is Available < /h1> <
        GoogleMap defaultZoom = { 10 }
        defaultCenter = {
            { lat: 45.421532, lng: -75.697189 } }
        />   <
        /div>

    );
}

const WrappedMap = withScriptjs(withGoogleMap(Map));

export default function RMap(id = map) {

    return ( <
            div style = {
                { width: '100vw', height: '100vh' } } >
            <
            WrappedMarp googleMapURL = { 'https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=geometry,drawing,places' }
            loadingElement = { < div style = {
                    { height: "100%" } }
                />}
                containerElement = { < div style = {
                        { height: "400px" } }
                    />}
                    mapElement = { < div style = {
                            { height: "100%" } }
                        />} /
                        >

                        <
                        /div>

                    );

                }

                ReactDOM.render( < RMap / > , document.getElementById('map'));