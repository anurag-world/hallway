import Dog from '../img/dog-img.jpg'
import Techcrunch from '../img/techcrunch.png'
import Tnw from '../img/tnw.png'
import Biz from '../img/bizinsider.png'
import Mashable from '../img/mashable.png'

const SectionTwo = () => {
  return (
    <>
      {/* Testimonials */}
      <div className="container-fluid bg-red">
        <div className="row justify-content-center">
          <div className="col-lg-6">
            <div className="text-center my-5">
              <h1 className="display-6 text-white">Testimonials</h1>
            </div>

            <div
              id=" carouselExampleIndicators"
              className="carousel slide my-4"
              data-bs-ride="carousel"
            >
              <ol className="carousel-indicators">
                <li
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  className="active"
                ></li>
                <li
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                ></li>
                <li
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                ></li>
              </ol>

              <div className="carousel-inner text-white py-5">
                <div className="carousel-item active">
                  <figure className="text-center">
                    <blockquote className="blockquote">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Quis vel eros donec ac odio tempor orci
                        dapibus ultrices. Tempus egestas sed sed risus pretium.
                      </p>
                    </blockquote>
                    <blockquote className="blockquote">
                      <img
                        src={Dog}
                        className="img-fluid profile"
                        alt="profile"
                      />
                    </blockquote>
                    <figcaption className="blockquote-footer mt-2 text-white">
                      Someone famous in{' '}
                      <cite title="Source Title">Source Title</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <a
                className="carousel-control-prev"
                href="#carouselExampleIndicators"
                role="button"
                data-bs-slide="prev"
              >
                <span
                  className="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
              </a>
              <a
                className="carousel-control-next"
                href="#carouselExampleIndicators"
                role="button"
                data-bs-slide="next"
              >
                <span
                  className="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      {/* Press */}
      <div className="container-fluid bg-light">
        <div className="row justify-content-center">
          <div className="col-lg-12 text-center my-5">
            <h1 className="display-6 text-red">Press Releases</h1>
          </div>

          <div className="col-lg-6 text-center my-5">
            <img
              className="press-logo img-fluid mx-3"
              src={Techcrunch}
              alt="tc-logo"
            />
            <img
              className="press-logo img-fluid mx-3"
              src={Tnw}
              alt="tnw-logo"
            />
            <img
              className="press-logo img-fluid mx-3"
              src={Biz}
              alt="biz-insider-logo"
            />
            <img
              className="press-logo img-fluid mx-3"
              src={Mashable}
              alt="mashable-logo"
            />
          </div>
        </div>
      </div>
    </>
  )
}

export default SectionTwo
