import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import Tutors from '../components/Tutors';

import { homeSection } from '../data/HomeSection';
import { courseSection } from '../data/CourseSection';
import { tutorSection, tutorList } from '../data/TutorSection';

import parse from 'html-react-parser'; //package untuk mengubah tag html
import '../styles/Home.css';

function Home() {
  return (
    <>
      <Navbar />
      <div className="wrapper">
        {/* Home Section */}
        <section id="home">
          <img src={homeSection.image} />
          <div className="kolom">{parse(homeSection.content)}</div>
        </section>

        {/* Course Section */}
        <section id="courses">
          <div className="kolom">{parse(courseSection.content)}</div>
          <img src={courseSection.image} />
        </section>

        {/* Tutor Section */}
        <section id="tutors">
          <div className="tengah">
            <div className="kolom">{parse(tutorSection.content)}</div>
            <Tutors tutorsList={tutorList} />
          </div>
        </section>
      </div>
      <Footer />
    </>
  );
}

export default Home;
