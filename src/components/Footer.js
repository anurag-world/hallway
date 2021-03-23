const Footer = () => {
  return (
    <>
      <div className="container-fluid bg-dark">
        <div className="row">
          <div className="col p-4">
            <nav className="nav justify-content-center mb-3">
              <a
                className="nav-link link-light"
                href={process.env.PUBLIC_URL + '/#/'}
              >
                Home
              </a>
              <a
                className="nav-link link-light"
                href={process.env.PUBLIC_URL + '/#/'}
              >
                Talent Management
              </a>
              <a
                className="nav-link link-light"
                href={process.env.PUBLIC_URL + '/#/'}
              >
                Public Relations
              </a>
              <a
                className="nav-link link-light"
                href={process.env.PUBLIC_URL + '/#/'}
              >
                Events n Entertainment
              </a>
              <a
                className="nav-link link-light"
                href={process.env.PUBLIC_URL + '/#/'}
              >
                Social Responsibility
              </a>
              <a
                className="nav-link link-light"
                href={process.env.PUBLIC_URL + '/#/'}
              >
                Gallery
              </a>
              <a
                className="nav-link link-light"
                href={process.env.PUBLIC_URL + '/#/'}
              >
                Contact Us
              </a>
            </nav>

            <p className="lead fs-6 fw-normal text-center text-white">
              HALLWAY &#8482; All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </>
  )
}

export default Footer
