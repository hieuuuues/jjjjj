import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.1/firebase-app.js";
import {
  getAuth,
  GoogleAuthProvider,
  signInWithPopup,
  signOut,
  onAuthStateChanged,
} from "https://www.gstatic.com/firebasejs/11.0.1/firebase-auth.js";
import {
  getFirestore,
  doc,
  setDoc,
  getDoc,
  onSnapshot,
  serverTimestamp,
} from "https://www.gstatic.com/firebasejs/11.0.1/firebase-firestore.js";

const firebaseConfig = {
  apiKey: "AIzaSyDr7ySnNfcgB2b2u2tPZLc5L4l1FGdjX4A",
  authDomain: "login-81d5f.firebaseapp.com",
  projectId: "login-81d5f",
  storageBucket: "login-81d5f.firebasestorage.app",
  messagingSenderId: "103989490854",
  appId: "YOUR_ACTUAL_APP_ID",
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const db = getFirestore(app);

export function signInWithGoogle() {
  const provider = new GoogleAuthProvider();
  return signInWithPopup(auth, provider)
    .then((result) => {
      const user = result.user;
      alert(`Đăng nhập thành công! Xin chào ${user.displayName}`);
      return user;
    })
    .catch((error) => {
      alert("Lỗi đăng nhập: " + error.message);
      throw error;
    });
}

export function signUpWithGoogle() {
  return signInWithGoogle(); // Đăng ký và đăng nhập dùng chung hàm
}

export function logout() {
  return signOut(auth)
    .then(() => {
      alert("Đã đăng xuất!");
    })
    .catch((error) => {
      alert("Lỗi đăng xuất: " + error.message);
      throw error;
    });
}

export async function initializeUserData(user) {
  const userRef = doc(db, "users", user.uid);
  const userSnap = await getDoc(userRef);
  if (!userSnap.exists()) {
    await setDoc(userRef, {
      name: user.displayName,
      email: user.email,
      photoURL: user.photoURL,
      lastLogin: serverTimestamp(),
      customData: [],
    });
  } else {
    await setDoc(userRef, { lastLogin: serverTimestamp() }, { merge: true });
  }
}

export function onUserStateChanged(callback) {
  return onAuthStateChanged(auth, async (user) => {
    if (user) {
      await initializeUserData(user);
      callback(user);
    } else {
      callback(null);
    }
  });
}

export async function addCustomData(
  user,
  newData,
  collectionName = "customData"
) {
  try {
    const userRef = doc(db, "users", user.uid);
    const userSnap = await getDoc(userRef);
    let currentData = userSnap.exists()
      ? userSnap.data()[collectionName] || []
      : [];
    currentData.push(newData);
    await setDoc(userRef, { [collectionName]: currentData }, { merge: true });
    console.log("Dữ liệu đã được thêm!");
  } catch (error) {
    console.error("Lỗi thêm dữ liệu:", error);
    throw error;
  }
}

export function listenToUserData(
  userId,
  callback,
  collectionName = "customData"
) {
  const userRef = doc(db, "users", userId);
  return onSnapshot(
    userRef,
    (userSnap) => {
      if (userSnap.exists()) {
        callback(userSnap.data());
      } else {
        callback({});
      }
    },
    (error) => {
      console.error("Lỗi tải dữ liệu:", error);
      callback({ error: "Lỗi tải dữ liệu." });
    }
  );
}

export { auth, db };
