import SecOne from '../img/sec-01.jpg'
import SecTwo from '../img/sec-02.jpg'
import SecThree from '../img/sec-03.jpg'

const SectionOne = () => {
  return (
    // Section 1
    <div className="container-fluid">
      <div className="row justify-content-center bg-light">
        <div className="col-lg-6 col-sm-12 col-xs-12 text-center">
          <img src={SecOne} className="img-fluid rounded my-5" alt="Section" />
        </div>

        <div className="col-lg-6 col-sm-12 col-xs-12 text-center px-5 my-5">
          <h1 className="display-6 text-red mb-4">WHO WE ARE</h1>

          <p className="lead fw-normal">
            HALLWAY is a Mumbai-based talent management, public relations and
            event management company that caters to local, national and
            international clients. Our services encompass Artist / Talent
            Management, Individual and Corporate Public Relations (PR) and Event
            Management. We work with clients who seek intelligent strategies and
            clever publicity to capture market share for their brands and
            themselves and desire events with sheer excellence.
          </p>
        </div>
      </div>

      {/* Section 2 */}

      <div className="row justify-content-center bg-dark">
        <div className="col-lg-6 col-sm-12 col-xs-12 text-center px-5 my-5">
          <h1 className="display-6 text-red mb-4">WHAT MAKES US DIFFERENT?</h1>

          <p className="lead fw-normal text-white">
            HALLWAY isn’t your average Artist, PR and Event Management Company.
            The market is fierce and competitive, and every company out there
            claims to be ‘innovative’, ‘strategic’, ‘passionate’ and ‘dynamic’.
            What we’re about is results: We work with the end goal in site. If
            you’re looking for Artist management, PR coverage and a
            well-thought-through event management, HALLWAY will deliver.
          </p>
        </div>

        <div className="col-lg-6 col-sm-12 col-xs-12 text-center">
          <img src={SecTwo} className="img-fluid rounded my-5" alt="Section" />
        </div>
      </div>

      {/* Section 3 */}

      <div className="row justify-content-center bg-light">
        <div className="col-lg-6 col-sm-12 col-xs-12 text-center">
          <img
            src={SecThree}
            className="img-fluid rounded my-5"
            alt="Section"
          />
        </div>

        <div className="col-lg-6 col-sm-12 col-xs-12 text-center px-5 my-5">
          <h1 className="display-6 text-red mb-4">WHAT DO WE DO?</h1>

          <p className="lead fw-normal">
            HALLWAY specializes in client-tailored advice and offers a range of
            services, including: artist and celebrity management, media
            relations, publicity, event management and social media initiatives
            to name a few.
          </p>
        </div>
      </div>
    </div>
  )
}

export default SectionOne
