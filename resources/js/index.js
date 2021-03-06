import React from 'react'
import {BrowserRouter as Router} from 'react-router-dom'
import ReactDOM from 'react-dom'
import Header from './views/layouts/header'
import IndexProvider from './contexts';
import IndexRoutes from './routes';
import './styles/index.scss';

export default function Index () {
    return (
        <Router>
            <IndexProvider>
                <Header />
                <IndexRoutes />
            </IndexProvider>
        </Router>
    );
}

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}