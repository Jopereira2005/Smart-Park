import styles from './ParkLotSession.module.scss'
import ParkLotCard from '../ParkLotCard/ParkLotCard';


const ParkLotSession = ( {parklots}) => {
  return (
    <div className={styles.container}>
      {parklots.map((parklot) => (
        <ParkLotCard 
          key={ parklot.id }
          name={ parklot.name }
          type={ parklot.type }
          status= { parklot.status }
        />
      ))}
    </div>
  );
};

export default ParkLotSession