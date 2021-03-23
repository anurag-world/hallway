import { Component } from 'react'
import { HashRouter, Switch, Route } from 'react-router-dom'
import Navigation from './components/Nav'
import Main from './pages/Main'
import Footer from './components/Footer'

class App extends Component {
  render() {
    return (
      <HashRouter>
        <Navigation />
        <Switch>
          <Route path="/" component={Main} exact />
        </Switch>
        <Footer />
      </HashRouter>
    )
  }
}

export default App
