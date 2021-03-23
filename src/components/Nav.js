import React from 'react'
import { Navbar, Nav } from 'react-bootstrap'
import Logo from '../img/logo.jpg'

const Navigation = () => {
  return (
    // Navigation
    <Navbar
      collapseOnSelect
      className="bg-red"
      sticky="top"
      variant="dark"
      expand="xl"
    >
      <div className="container">
        <Navbar.Brand href={process.env.PUBLIC_URL}>
          <img src={Logo} alt="logo" />
        </Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav>
            <Nav.Link href={process.env.PUBLIC_URL + '/#/'}>Home</Nav.Link>
            <Nav.Link href={process.env.PUBLIC_URL + '/#/'} title="About Us">
              About Us
            </Nav.Link>
            <Nav.Link href={process.env.PUBLIC_URL + '/#/'} title="About Us">
              Talent Management
            </Nav.Link>
            <Nav.Link href={process.env.PUBLIC_URL + '/#/'} title="About Us">
              Public Relations
            </Nav.Link>
            <Nav.Link href={process.env.PUBLIC_URL + '/#/'} title="About Us">
              Events N Entertainment
            </Nav.Link>
            <Nav.Link href={process.env.PUBLIC_URL + '/#/'} title="About Us">
              Social Responsibility
            </Nav.Link>
          </Nav>
        </Navbar.Collapse>
      </div>
    </Navbar>
  )
}

export default Navigation
